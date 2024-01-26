import { reactive } from "vue";

export const store = reactive({
  TodoList: [],
  apiURL: "http://localhost:80/php-todo-list-json/Back/",
  insTask: "",
  //modifica status task
  apiURL1: "http://localhost:80/php-todo-list-json/Back/result.php",
  //aggiunta nuovo task alla lista
  apiURL2: "http://localhost:80/php-todo-list-json/Back/addTask.php",
});
