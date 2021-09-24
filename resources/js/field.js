Nova.booting((Vue, router, store) => {
  Vue.component('index-nova-action-button', require('./components/IndexField'))
  Vue.component('detail-nova-action-button', require('./components/DetailField'))
})
