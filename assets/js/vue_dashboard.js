 // this requires the compiler
    var app = new Vue({
        el: '#test',
        data() {
            return {
                name: 'Kishan'
            }
        }
    });

    Vue.component('testcomponent',{
        template: "#login-view"
    });
    var vm = new Vue({
        el: '#test'
    });

    // LOGIN LINK
    var app = new Vue({
        el: '#login-link',
        data() {
            return {
                label: 'Login',
                name:'mohit'
            }
        }
    });
