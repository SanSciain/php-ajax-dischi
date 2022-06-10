const app = new Vue({
  el: "#root",
  data: {
    disks: [],
    },
  methods: {
      
  },
  created() {
    axios
      .get("http://localhost:80//php-ajax-dischi/milestone2/server.php")
      .then((resp) => {
        this.disks = resp.data;
      });
  },
});