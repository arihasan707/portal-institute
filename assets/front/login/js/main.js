const loading = $('.loading');

function show(){
	loading.css("display","block");
}

function hide(){
	setTimeout(function() {
		loading.css("display","none");
	},700)
}

$('.submit').onClick(()=>{
    console.log('suskes');
})