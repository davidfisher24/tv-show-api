
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

var results = new Vue({
    el: '#results',
    data: {
        list: true,
        json: false,
    },
    methods:{
        toggle: function(){
            this.list = !this.list;
            this.json = !this.json;
        },
        copyJson: function(){
        	document.querySelector('.rawJson').select();

        	try {
		        var status = document.execCommand('copy');
		        if(!status){
		            alert("Cannot copy text");
		        }else{
		            alert("The json is now on the clipboard");
		        }
		    } catch (err) {
		        alert('Unable to copy.');
		    }
        },
    }
});
