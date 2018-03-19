import Datepicker from "vuejs-datepicker";


Vue.component("home", {
  props: ["user", "teams", "currentTeam"],
  components: {
    Datepicker
  },
  mounted() {
    console.log(Spark.state.teams);
  }
});
