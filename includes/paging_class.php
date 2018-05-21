<?php
class Paging_Class {

    /**
     * Total Records from SQL.
     * @var int
     */
    private $totalRecords;

    /**
     * Records to display per page
     * @var int
     */
    public $recordsPerPage;

    /**
     * internal variable to hold the start index for sql.
     * @var int
     */
    public $start;

    /**
     *
     * @var int
     */
    public $startFrom;

    /**
     * Current page which need to be displayed differently without link.
     * @var int
     */
    public $currentpage = 1;

    /**
     * URL which needs to display while paging.
     * @var string
     */
    private $linkName;

    /**
     * base url for image.
     * @var string
     */
    public $imagePath = '';
    public $displayCount = 5;
    private $num_links = 3;
    public $totalPages;

    /**
     *  Constructor for class
     */
    public function __construct() {
        
        $this->recordsPerPage = 10;
        $this->start = (!isset($_GET['start'])) ? '0' : ($_GET['start'] - 1); // required to set paging.
        $this->startFrom = ($this->start == 0) ? 0 : (($this->start + 1) * $this->recordsPerPage) - $this->recordsPerPage;
        $this->imagePath = $_SERVER['HTTP_HOST'];
    }

    /**
     * Set the total records and url needed for class.
     *
     * @param int $totalRecords
     * @param int $currentPage
     * @param int $recordsPerPage
     * @param string $linkName 
     */
    public function processPaging($totalRecords, $linkName = '#') {
        $this->totalRecords = $totalRecords;
        $start = ($this->start + 1);
        $this->currentpage = ($start == 0 || $start == 1) ? '1' : $start;
        $this->linkName = $this->cleanURL($linkName);
        $this->totalPages = ceil($this->totalRecords / $this->recordsPerPage);
    }

    /**
     * It returns the paging string with numbers and url.
     *
     * @return string URL with paging.
     */
    private function getPaging() {
        $nextSet = 0; // Start value, incremented by the total records per page.
        $output = '<ul class="pagination">';
        $urlShow = false; // display paging only if the pages are more than 1.
        // Adding "<< Previous" and first record jump link.
        if ($this->currentpage != 1) {

            $delimiter = (strpos($this->linkName, '?') == false) ? '?' : '&';

            // Adding link to jump on first record. << First            
            /*$output.="<a class='prev_next' href='" . $this->linkName .
                    $delimiter . "start=1'>
            <img src='" . $this->imagePath . "assets/images/pagination_first.png' border=0 alt='First Page'></a>";*/

            // Adding link to jump on Previous page.
            $output.="<li><a class='prev_next'
            href='" . $this->linkName . $delimiter . "start=" . ($this->currentpage - 1) . "'>Previous</a></li>";
        } else {
            // Adding link to jump on first record. << First
            //http://site.hoover.local/assets/images/pagination_left.png
           /* $output.="<a href='JavaScript:void();' class='prev_next'><img src='" . $this->imagePath . "assets/images/pagination_first.png' border=0 alt='First'></a>";*/

            // Adding link to jump on Previous page.
            $output.="<li class='disabled'><a href='JavaScript:void();' class='prev_next'>Previous</a></li>";
        }
        $urlShow = true;
        $delimiter = (strpos($this->linkName, '?') == false) ? '?' : '&';

        // Logic to build the navigation in paging.
        $startlink = (($this->currentpage - $this->num_links) > 0) ? $this->currentpage - ($this->num_links - 1) : 1;
        $endlink = (($this->currentpage + $this->num_links) < $this->totalPages) ? $this->currentpage + $this->num_links : $this->totalPages;

        //echo "($startlink-$endlink)";

        for ($i = $startlink; $i <= $endlink; $i++) {
            $output.= "<li ";
            if ($this->currentpage == $i) {
                $output.= "class='active' ";
            }
            $output.= "><a href='" . $this->linkName . $delimiter . 'start=' . $i . "'> " . $i . "</a></li>";
        }

        $nextSet = $nextSet + $this->recordsPerPage;

        // Adding Last and Next record jump link.
        if ($this->currentpage != $this->totalPages) {
            $delimiter = (strpos($this->linkName, '?') == false) ? '?' : '&';

            // Adding Next Record jump link
            $output.="<li><a class='prev_next' href='" . $this->linkName . $delimiter . "start=" . ($this->currentpage + 1) .
                    "'>Next</a></li>";

            // Adding Last record jump link
           /* $output.="<a class='prev_next'
            href='" . $this->linkName . $delimiter . "start=" . $this->totalPages . "'>
                <img src='" . $this->imagePath . "assets/images/pagination_last.png' border=0 alt='Last page' title='Last page'></a>";*/
        } else {
            $output.="<li class='disabled'><a class='prev_next' href='JavaScript:void();'>Next</a></li>";
            /*$output.="<a class='prev_next' href='JavaScript:void();'><img src='" . $this->imagePath . "assets/images/pagination_last.png' border=0 title='Last' alt='Last'></a>";*/
        }
        $output.="</ul>";

        if ($urlShow == true) {
            return $output;
        } else {
            return;
        }
    }

    /**
     * Decides the paging type for the records.
     * Paging can be Jquery or PHP based on the count of records.
     */
    public function showPaging() {
        //display server side paging
        return $this->getPaging();
    }

    /**
     * Function clean the url from any existing 'start' or 'perpage' values from
     * querystring of url.
     * 
     * @param <type> $url
     * @return <type> 
     */
    public function cleanURL($url) {
        if (strpos($url, '?') == false) {
            return $url;
        }
        list($filename, $querystring) = explode("?", $url);
        $queryArray = explode("&", $querystring);

        foreach ($queryArray as $key => $val) {
            @list($name, $value) = explode("=", $val);
            if ($name == 'start') {
                unset($queryArray[$key]);
            }
        }
        $queryString = implode("&", $queryArray);
        if ($queryString == '') {
            return $filename;
        }
        return $filename . "?" . $queryString;
    }

    public function showDropDown() {
        $delimiter = (strpos($this->linkName, '?') == false) ? '?' : '&';
        $output = "Go to page";

        $output.="<select onchange='JavaScript: document.location.href=this.value;'>";
        $output.="<option value='#'>Select</option>";
        for ($i = 1; $i <= $this->totalPages; $i++) {
            $output.= "<option value='" . $this->linkName . $delimiter . 'start=' . $i . "'>" . $i . "</option>";
        }
        $output.="</select>";
        return $output;
    }

    public function getpageTextBox() {
        $currentURL = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        strpos($currentURL, 'start=');
        $newurl = substr($currentURL, 0, strpos($currentURL, 'start='));
        echo '<form name="gotopage_form" id="gotopage_form" action="' . $_SERVER['PHP_SELF'] . '" method="get">';
        echo 'Go to page <input type="text" size="2" name="start" id="gotopage_no" value="" max="' . $this->totalPages . '" class="required" size="10" /> ';
        foreach ($_GET as $key => $val) {
            if ($key != 'start' && $key != 'gotppage') {
                echo '<input type="hidden" name="' . $key . '" value="' . $val . '" >' . "\n";
            }
        }
        echo '<input type="submit" name="gotppage" id="gotppage" value="GO" />';
        echo '</form>';
    }

    public function changeRecordsPerPageCombo() {
        $currentURL = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        strpos($currentURL, 'start=');
        $newurl = substr($currentURL, 0, strpos($currentURL, 'start='));
        echo '<form name="gotopage_form" id="gotopage_form" action="' . $_SERVER['PHP_SELF'] . '" method="get">';
        echo 'Per Page ';
        echo '<select name="rpp" size="1">';
        $selected = ($this->recordsPerPage == 10) ? "selected" : "";
        echo '<option value="10" ' . $selected . ' >10</option>';
        $selected = ($this->recordsPerPage == 25) ? "selected" : "";
        echo '<option value="25" ' . $selected . ' >25</option>';
        $selected = ($this->recordsPerPage == 50) ? "selected" : "";
        echo '<option value="50" ' . $selected . ' >50</option>';
        echo '</select>';
        foreach ($_GET as $key => $val) {
            if ($key != 'start' && $key != 'gotppage') {
                echo '<input type="hidden" name="' . $key . '" value="' . $val . '" >' . "\n";
            }
        }
        echo '<input type="submit" name="gotppage" id="gotppage" value="GO" />';
        echo '</form>';
    }

}

?>
