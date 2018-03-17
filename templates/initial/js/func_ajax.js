/*******************************************************************************
*             ______________________________________________________
            /¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯\
            |     COMMON FUNCTION FOR IMPLEMENTATION OF AJAX       |
            |                                                      |
            |            Developed By : Sameer Pal Singh               |
            |            Created on   : 8/7/2006 3:58 PM               |
            |                                                       |
            |            E-mail me :                                |
            |                - 'sameers@e-lixirweb.com'               |
            |                                                      |
            \______________________________________________________/
             ¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯
*
* The "options" parameter is an anonymous object which includes the following
* available options:
*
* params:    Parameters for the requested url in the format p1=1&p2=0&p3=2
* meth:      The request method. Can be "get" or "post". Default is "post".
* async:     Toggles asynchronous mode. Default is true.
* startfunc: A function or list of functions to be called before the AJAX
*            request is made. A list of functions must be separated by the
*            semi-colon like this: "showLoad(); animateText(); hideDiv('divname')".
*            You can pass parameters into the functions.
* endfunc:   A function or list of functions to be called after a successful
*            AJAX request. Uses the same format as "startfunc".
* errorfunc: A function or list of functions to be called when the AJAX request
*            is unsuccessful. Uses the same format as "startfunc".
*
* Returns true on success and false on failure.
*
* Example Usage:
*
  callAjax( "rightdiv", "getData.php", {
    params:"id=12&name=sameer",
    meth:"post",
    async:true,
    startfunc:"elemOn('loading')",
    endfunc:"elemOff('loading'); elemOn('rightdiv')",
    errorfunc:"ajaxError()" }
  );

*/

function callAjax( elemid, url, options )
{
  var params = options.params || "";
  //var meth = options.meth || "post";
  var meth = "get";
  var async = options.mode || true;
  var startfunc = options.startfunc || "";
  var endfunc = options.endfunc || "";
  var errorfunc = options.errorfunc || "";

  if( startfunc != "" )
    eval( startfunc );

  var url_with_param = url+( params != "" ? "?"+params : "" );

  loadXMLDoc_rand();
//----------------------------------------------------------------
    var xmlhttp_rand
    function loadXMLDoc_rand()
    {

        // code for Mozilla, etc.
        if (window.XMLHttpRequest)
          {
              xmlhttp_rand=new XMLHttpRequest()
              xmlhttp_rand.onreadystatechange=xmlhttpChange_rand
              xmlhttp_rand.open(meth,url_with_param,async)
              xmlhttp_rand.send(null)
          }
        // code for IE
        else if (window.ActiveXObject)
          {
            //alert(1);
            xmlhttp_rand=new ActiveXObject("Microsoft.XMLHTTP")
            if (xmlhttp_rand)
            {
                //alert(2);
                xmlhttp_rand.onreadystatechange=xmlhttpChange_rand
                    //alert(meth);
                    //alert(url);
                    //alert(params);
                xmlhttp_rand.open(meth,url,async);
                    //alert(22);
                xmlhttp_rand.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
                xmlhttp_rand.send(params);
                return false;
              }else
              {
                  //alert(3);
                    alert( "Your browser cannot perform the requested action. "+
                         "Either your security settings are too high or your "+
                         "browser is outdated. Try the newest version of "+
                         "Internet Explorer or Mozilla Firefox." );
                    return false;
              }
          }
    }

    function xmlhttpChange_rand()
    {
    // if xmlhttp shows "loaded"
    if (xmlhttp_rand.readyState==4)
      {

          if (xmlhttp_rand.status==200)
            {

             var objXML = xmlhttp_rand.responseXML;
             var objXML1 = xmlhttp_rand.responseText;
             //alert(objXML1);
             if(elemid != "")
             {
                 document.getElementById(elemid).innerHTML = objXML1;
             }
             if( endfunc != "" )
                eval( endfunc );
          }
          else
            {
                alert("Problem retrieving XML data")
                if( endfunc != "" )
                    eval( endfunc );
              if( errorfunc != "" )
                    eval( errorfunc );
                  return false;
            }
        }
    }
}
//END OF AJAX FUNCTIONS.