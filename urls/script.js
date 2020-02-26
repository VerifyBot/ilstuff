function encodeURL(ev) {
    url_string = ev.target.value;
    $('.decode_urloutput').val(encodeURI(url_string));
}

function decodeURL(ev) {
    url_string = ev.target.value;
    console.log(url_string)
    $('.encode_urloutput').val(decodeURI(url_string))
}

$('.decode_urlinput').keyup(ev => encodeURL(ev)).keypress(ev => encodeURL(ev))
$('.encode_urlinput').keyup(ev => decodeURL(ev)).keypress(ev => decodeURL(ev))
