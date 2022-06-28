$("#jsGrid").jsGrid({
  width: "100%",
  height: "auto",
  inserting: true,
  editing: false,
  sorting: true,
  paging: true,
  autoload: true,
  deleteConfirm: "Do you really want to delete data?",

  rowClick: function (item) {
        // window.location.replace(
        // `${baseUrl}employees/${item.item.id}`
        // );
     console.log(item.item.id);
     window.location.href = "employee/employee/" + item.item.id
  },

  controller: {
    loadData: function (response) {
      return $.ajax({
        type: "GET",
        url: `${baseUrl}employee/getAllEmployees`,
        dataType: "json",
        error: function (xhr, status) {
          console.log(xhr, status);
        },
      });
    },
    insertItem: function (item) {
      $.ajax({
        type: "POST",
        url: `${baseUrl}employee/createEmployee`,
        dataType: "json",
        data: item,
        error: function (xhr, status) {
          console.log(xhr, status);
        },
      })
    },
    deleteItem: function (item) {
      $.ajax({
        type: "DELETE",
        url: `${baseUrl}dashboard/delete/` + item.id,
        dataType: "json",
        data: item,
        error: function (xhr, status) {
          console.log(xhr, status);
        },
      })
      console.log("object");
      // deleteItemHandler(item);
    },
  },

  fields: [
    { name: "id", title: "id", type: "text", visible: false },
    {
      name: "name",
      title: "Name",
      type: "text",
      width: 3,
      validate: "required",
    },
    {
      name: "email",
      title: "Email",
      type: "text",
      width: 10,
      validate: "required",
    },
    {
      name: "age",
      title: "Age",
      type: "number",
      width: 2,
      validate: "required",
    },
    {
      name: "streetAddress",
      title: "Street No.",
      type: "number",
      width: 2,
      validate: "required",
    },
    {
      name: "city",
      title: "City",
      type: "text",
      width: 3,
      validate: "required",
    },
    {
      name: "state",
      title: "State",
      type: "text",
      width: 2,
      validate: "required",
    },
    {
      name: "postalCode",
      title: "Postal Code",
      type: "number",
      width: 2,
      validate: "required",
    },
    {
      name: "phoneNumber",
      title: "Phone Number",
      type: "number",
      width: 3,
      validate: "required",
    },
    { type: "control", width: 1, editButton: false },
  ],
});
