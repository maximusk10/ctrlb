import Datepicker from "vuejs-datepicker";

Vue.component("crear-campana", {
  components: {
    Datepicker
  },
  methods: {
    customFormatter(date) {
      return moment(date).format("YYYY-DD-MM");
    }
  },
  mounted() {
    console.log("wololo");
  }
});

