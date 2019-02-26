const app = new Vue({
  el: '#post',
  data: {
    s: 34,
    commentCount: 12,
    title: 'Vivamus nisi tellus, interdum vel iaculis id, dignissim in metus. Morbi...',
    green: false,
    red: false,
    showComments: true
  },
  methods: {
    upVote() {
      if(this.red) {
        return;
      } else if(!this.green) {
        this.s += 1;
        this.green = !this.green;       
      } else {
        this.s -= 1;
        this.green = !this.green;
      }
    },
    downVote() {
      if(this.green) {
        return;
      } else if(!this.red) {
        this.s -= 1;
        this.red = !this.red;       
      } else {
        this.s += 1;
        this.red = !this.red;
      }
    }
  }
})