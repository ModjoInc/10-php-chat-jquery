$('#conversation').hide();
$('#login').hide();

$(function(){
  list();
});

function list(){
  __ajax("lib/conversation.php", "").done( function( info ){
  //  console.log( info);
   let messages = JSON.parse( info );
   let html = "";

   for (let i in messages.data) {
     html+=`<p class="text"><b>${[messages.data[i].date]}</b></p>
     <p class="text"><b>${[messages.data[i].user_id]}</b></p>
     <p class="text"><b>${[messages.data[i].content]}</b></p>`
   }
   $('#JSchat').html(html);
 });
}

function __ajax(url, data) {
	let ajax = $.ajax({
    "method": "POST",
    "url": url,
    "data": data
  });
  return ajax;
}
