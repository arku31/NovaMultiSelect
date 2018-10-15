Nova.booting((Vue, router) => {
    Vue.component('index-multiselect', require('./components/IndexField'));
    Vue.component('detail-multiselect', require('./components/DetailField'));
    Vue.component('form-multiselect', require('./components/FormField'));
})
