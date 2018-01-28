//Configuring the Vue Component 
Vue.component('about-us',{
	props:['message'],
	template:'<li>{{ message.about }}</li>'
})

var app = new Vue({
	el:"#aboutMessage",
	data:{
		contents:[
		{ about: "This is by the courtsey of the Vue Js Component Framework"},
		{ about: "Use for great application creation and configurations"}
		]
	}
})