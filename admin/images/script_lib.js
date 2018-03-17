/**
 * check if the field is empty
 */
function isEmpty(s) {
	if (s.length == 0) return true;
	if (trim(s).length == 0) return true;
	return false;
}

//	TODO: check the function
function isEmail(s) {
	return isValidEmail(s);
}

/**
 * Email Validation 
 */
function isValidEmail(s) {
	var v = trim(s);
	var we_had_monkey = false, relief = true;
	var we_had_dot = false;
	var count = 0;
	for(i = 0; i < v.length; i++) {
		c = v.charAt(i);
		count++;
		if (we_had_monkey == true) {
			if (c == '.') {
				we_had_dot = true;
				if (relief == true) {
					relief = false;
					continue;
				} else {
					return false;
				}
			}
			if (relief == false) relief = true;
		} else {
			if (c == '.') continue;
			if (c == '@') {

				if (count == 1) {
					return false;
				}
				count = 0;
				we_had_monkey = true;
				relief = false;
				continue;
			}
		}
		

		if ((c >= 'a')&&(c <= 'z')) continue;
		if ((c >= 'A')&&(c <= 'Z')) continue;
		if ((c >= '0')&&(c <= '9')) continue;
		if ((c == '-')||(c == '_')) continue;
		if ((c == "'")) continue;
		
		return false;
	}
	
	

	if (we_had_monkey == false) return false;
	else {

		if (c == '@') return false;
		if (c == '-') return false;
		if (c == '_') return false;
		if (c == "'") return false;

		if ((c == '.')||(v.charAt(i-2) == '.')) return false;

		if (we_had_dot == false) return false;

	}
	return true;
}


function isPassword(s) {
	return true;
}
	
function trim(s) {
	var i = 0;
	while(isspace(s.charAt(i))) i++;
	if (i == s.length) return new String('');
		
	var j = s.length - 1;
	while(isspace(s.charAt(j))) j--;
		
	return s.substring(i, j + 1);
}
	
function isspace(c) {
	if (c == ' ') return true;
	if (c == '\n') return true;
	return false;
}
	
function isFloat(string) {
	return isNaN(parseFloat(string));
}

/**
 * Checks  parameter for number.
 */
function isNumber(s) {
	var v = trim(s);
	var i, c, we_had_dot = false;
	
	for(i = 0; i < v.length; i++) {
		c = v.charAt(i);
		if (i == 0) if ((c == '-')||(c == '+')) continue;
		if ((c == '.')&&(we_had_dot == false)) {
			we_had_dot = true;
			continue;
		}
		if ((c < '0') || (c > '9')) return false;
	}
	
	//
	if (v > 2000000000 || v < -2000000000) {
		return false;
	}
	
	return true;
}

/**
 *
 */
function verifyDate(day, month, year) {
	if ( isEmpty(day.value) || isEmpty(month.value) || isEmpty(year.value) )
		return false;
	
	var _day = parseInt(day.value, 10);
	var _month = parseInt(month.value, 10);
	var _year = parseInt(year.value, 10);
	
	// alert('[verifyDate checkpoint 1] ' + _day + '-' + _month + '-' + _year);
	
	if (isNaN(_day) || isNaN(_month) || isNaN(_year))
		return false;
	
	if ((_month < 1) || (_month > 12)) return false;
	
	var max_day_count;
	switch(_month) {
		case  1 :
		case  3 :
		case  5 :
		case  7 :
		case  8 :
		case 10 :
		case 12 :
			max_day_count = 31;
			break;
			
		case  2 :
			if ((_year % 4) == 0) max_day_count = 29;
			else max_day_count = 28;
			break;
			
		default :
			max_day_count = 30;
	}
	
	if ((_day < 1) || (_day > max_day_count)) return false;
	return true;
}

/**
 *
 */
function verifyDate2(_date) {
	if (isEmpty(_date))
		return false;
	
	var _day = parseInt(_date.substring(8, 10), 10);
	var _month = parseInt(_date.substring(5, 7), 10);
	var _year = parseInt(_date.substring(0, 4), 10);
	
	// alert('[verifyDate checkpoint 1] ' + _day + '-' + _month + '-' + _year);
	
	if (isNaN(_day) || isNaN(_month) || isNaN(_year))
		return false;
	
	if ((_month < 1) || (_month > 12)) return false;
	
	var max_day_count;
	switch(_month) {
		case  1 :
		case  3 :
		case  5 :
		case  7 :
		case  8 :
		case 10 :
		case 12 :
			max_day_count = 31;
			break;
			
		case  2 :
			if ((_year % 4) == 0) max_day_count = 29;
			else max_day_count = 28;
			break;
			
		default :
			max_day_count = 30;
	}
	
	if ((_day < 1) || (_day > max_day_count)) return false;
	return true;
}


/**
 * Prepare date form fields printed with print_form_date1()
 */
// todo: in development
function createDate1(outfield, infield, required) {
// todo: for print_form_date1()
	outfield.value = '9999-01-01';
	
	_date = infield.value;
	
	// todo: parse for incomplete date
	var _day = parseInt(_date.substring(0, 2), 10);
	var _month = parseInt(_date.substring(3, 2), 10);
	var _year = parseInt(_date.substring(6, 4), 10);
	
	if ((required != 'no') || (isEmpty(_date) != false))
		if (verifyDate(_day, _month, _year) == false) return false;
	
	return createDate(outfield, _day, _month, _year);
}

/**
 * Prepare date form fields printed with print_form_date2/3()
 */
function createDate(outfield, day, month, year) {
	outfield.value = '9999-01-01 00:00:00';
	
	// accept no date at all
	if (isEmpty(day.value) && isEmpty(month.value) && isEmpty(year.value)) return true;
	
	// alert(day.value + '-' + month.value + '-' + year.value);
	
	if (verifyDate(day, month, year) == false) return false;
	
	var _day = parseInt(day.value, 10);
	var _month = parseInt(month.value, 10);
	var _year = parseInt(year.value, 10);
	
	var mzero = '';
	var dzero = '';
	
	if (_month < 10) mzero = '0';
	if (_day < 10) dzero = '0';
	
	outfield.value = '' + _year + '-' + mzero + _month + '-' + dzero + _day;
	
	return true;
}

/**
 *	Checks if some data field has been modified on the page
 */

function isModified() {
	if (is_modified)
		if (!confirm('Data on this page has been modified.\nIf you proceed, changes wont\'t be saved.\nProceed anyway?'))
			return false;
	return true;
}

/**
 *	Check if the supplied string is an image
 *	
 *	Note: check is the image mandatory using isEmpty() before
 */
function isImage(filename) {
	filename = trim(filename).toLowerCase();
	if (filename == '') return true;
	var l = filename.length;
	if (l < 5) return false;
	if (filename.substr(l - 4) == '.jpg') return true;
	if (filename.substr(l - 4) == '.gif') return true;
	if (filename.substr(l - 5) == '.jpeg') return true;
	
	return false;
}

/**
 *	Check for the positive integer
 *	
 *	
 */

function isPosInteger(inputVal) {
	inputStr = inputVal.toString();
	for (var i = 0; i < inputStr.length; i++) {
		var oneChar = inputStr.charAt(i);
		if (oneChar < '0' || oneChar > '9') {
			return false;
		}
	}
	return true;
	
}
