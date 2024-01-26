import { reactive } from "vue";

export const store = reactive({
  TodoList: [],
  apiURL: "http://localhost:80/php-todo-list-json/Back/",
  searchText: "",

  apiURL1: "http://localhost:80/php-todo-list-json/Back/result.php",
});
