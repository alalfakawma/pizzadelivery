const app = new Vue({
    el: '#app',
    methods: {
    	toggleSubmenu: function(e) {
    		const el = e.currentTarget;
    		const ul = el.nextElementSibling;
    		if (ul) {
    			if (ul.classList.contains('is-hidden')) {
    				ul.classList.remove('is-hidden'); // Show it
    				if (!el.classList.contains('is-active')) {
    					el.classList.add('is-active');
    				}
    			} else {
    				ul.classList.add('is-hidden'); // Hide it
					el.classList.remove('is-active');
    			}
    		}
    	},
    }
});