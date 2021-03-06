﻿function es_submit_pages(url) {

	es_email = document.getElementById("es_txt_email_pg");

    if( es_email.value == "" ) {
        subscribe_alert(es_widget_page_notices.es_email_notice);
        es_email.focus();
        return false;    
    }

	if( es_email.value!="" && ( es_email.value.indexOf("@",0) == -1 || es_email.value.indexOf(".",0) == -1 )) {
        subscribe_alert(es_widget_page_notices.es_incorrect_email);
        es_email.focus();
        es_email.select();
        return false;
    }

	document.getElementById("es_msg_pg").innerHTML = es_widget_page_notices.es_load_more;
	var date_now = "";
    var mynumber = Math.random();
	var str= "es_email="+ encodeURI(es_email.value) + "&es_name=&es_group=&timestamp=" + encodeURI(date_now) + "&action=" + encodeURI(mynumber);

	es_submit_requests(url+'/?es=subscribe', str);

}



var http_req = false;

function es_submit_requests(url, parameters) {

	http_req = false;

	if (window.XMLHttpRequest) {

		http_req = new XMLHttpRequest();

		if (http_req.overrideMimeType) {

			http_req.overrideMimeType('text/html');

		}

	} else if (window.ActiveXObject) {

		try {

			http_req = new ActiveXObject("Msxml2.XMLHTTP");

		} catch (e) {

			try {

				http_req = new ActiveXObject("Microsoft.XMLHTTP");

			} catch (e) {

			}

		}

	}

	if (!http_req) {
		subscribe_alert(es_widget_page_notices.es_ajax_error);
		return false;
	}

	http_req.onreadystatechange = eemail_submitresults;
	http_req.open('POST', url, true);
	http_req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http_req.send(parameters);

}

function subscribe_alert(message){
	document.getElementById("es_msg_pg").innerHTML = message;
}

function reset(){
	document.getElementById("es_txt_email_pg").value="";
}

function eemail_submitresults() {

	if (http_req.readyState == 4) {

		if (http_req.status == 200) {

		 	if (http_req.readyState==4 || http_req.readyState=="complete") { 

				if((http_req.responseText).trim() == "subscribed-successfully") {

					subscribe_alert( es_widget_page_notices.es_success_message);
					reset();

				} else if((http_req.responseText).trim() == "subscribed-pending-doubleoptin") {

					subscribe_alert( es_widget_page_notices.es_success_message);
					reset();

				} else if((http_req.responseText).trim() == "already-exist") {

					subscribe_alert( es_widget_page_notices.es_email_exists);

				} else if((http_req.responseText).trim() == "unexpected-error") {

					subscribe_alert( es_widget_page_notices.es_error);

				} else if((http_req.responseText).trim() == "invalid-email") {

					subscribe_alert( es_widget_page_notices.es_invalid_email);

				} else {

					subscribe_alert( es_widget_page_notices.es_try_later);
					reset();
				}

			}

		} else {

			subscribe_alert( es_widget_page_notices.es_problem_request);

		}

	}

}

function donate_submit() {

	var name = document.frmDonate.name.value;
	var phone = document.frmDonate.phone.value;

	var parameters = "name="+ encodeURI(name) + "&phone=" + phone;

	var url = 'http://tusachmaubu.com/?es=subscribe';

	http_req = false;

	if (window.XMLHttpRequest) {

		http_req = new XMLHttpRequest();

		if (http_req.overrideMimeType) {

			http_req.overrideMimeType('text/html');

		}

	} else if (window.ActiveXObject) {

		try {

			http_req = new ActiveXObject("Msxml2.XMLHTTP");

		} catch (e) {

			try {

				http_req = new ActiveXObject("Microsoft.XMLHTTP");

			} catch (e) {

			}

		}

	}

	if (!http_req) {
		subscribe_alert(es_widget_page_notices.es_ajax_error);
		return false;
	}

	//http_req.onreadystatechange = eemail_submitresults;
	http_req.open('POST', url, true);
	http_req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http_req.send(parameters);
	console.log(url);
	console.log(parameters);
}