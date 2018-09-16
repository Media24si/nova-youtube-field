Nova.booting((Vue, router) => {
    Vue.component('index-nova-youtube-field', require('./components/IndexField'));
    Vue.component('detail-nova-youtube-field', require('./components/DetailField'));
    Vue.component('form-nova-youtube-field', require('./components/FormField'));
})
