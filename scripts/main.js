var app = new Vue({
  el: '#app',

  data: {
    modalIsOpen: false,
  },

  methods: {
    toggleModal() {
      this.modalIsOpen = !this.modalIsOpen
    }
  },
})