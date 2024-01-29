import { reactive } from "vue";

export const store = reactive({
  TodoList: [],
  apiURL: "http://localhost:80/php-todo-list-json/Back/",
  insTask: "",

  //modifica status task
  status: "result.php",
  //aggiunta nuovo task alla lista
  addTask: "addTask.php",
  //eliminazione task dalla lista
  delTask: "dellTask.php",
});
