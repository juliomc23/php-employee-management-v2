$("#jsGrid").jsGrid({
  width: "100%",
  height: "auto",
  inserting: true,
  editing: false,
  sorting: true,
  paging: true,
  autoload: true,

  rowClick: function (item) {
    console.log(item);
     window.location.replace(
      //  `${baseUrl}employee/renderEmrenderEmployeeployee/${item.item.id}`
        //  `${baseUrl}employee/renderEmployee` + item.item.id
        window.location.href = "employee/renderEmployee/" + item.item.id
     );
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

// $("#jsGrid").jsGrid({
//     width: "100%",
//     height: "auto",
  
//     inserting: true,
//     editing: false,
//     sorting: true,
//     paging: true,
//     autoload: true,
//     pageSize: 15,
//     pageButtonCount: 5,
//     selecting: true,
//     deleteConfirm: "Do you really want to delete data?",
  
//     rowClick: function (element) {
//       console.log(element.item.emp_no);
//       window.location.href = "getById/" + element.item.emp_no;
//     },
  
//     controller: {
//       loadData: function (filter) {
//         return $.ajax({
//           type: "GET",
//           url: "getEmployees",
//           data: filter,
//           dataType: "json",
//           success: function (resp) {
//             console.log("GET: ", resp);
//           },
//         });
//       },
//       insertItem: function (item) {
//         return $.ajax({
//           type: "POST",
//           url: "createEmployee",
//           data: item,
//           success: function (resp) {
//             $("#jsGrid").jsGrid("option", "inserting", false);
//           },
//         });
//       },
//       deleteItem: function (item) {
//         return $.ajax({
//           type: "DELETE",
//           url: "deleteEmployee/" + item.emp_no,
//           data: item,
//         });
//       },
//     },
  
//     onItemInserted: function (args) {
//       console.log(args);
//     },
  
//     fields: [
//       {
//         title: "id",
//         name: "emp_no",
//         css: "hidden-cell",
//         align: "left",
//         width: 50,
//       },
//       {
//         title: "Name",
//         name: "first_name",
//         align: "left",
//         type: "text",
//         width: 100,
//         validate: "required",
//       },
//       {
//         title: "Last name",
//         name: "last_name",
//         css: "hidden-cell",
//       },
//       {
//         title: "Email",
//         name: "email",
//         type: "text",
//         width: 150,
//         validate: "required",
//       },
//       {
//         title: "Gender",
//         name: "gender",
//         type: "hidden",
//         width: 70,
//         css: "hidden-cell",
//       },
//       {
//         title: "City",
//         name: "city",
//         type: "text",
//         width: 150,
//         validate: "required",
//       },
//       {
//         title: "St. Adress",
//         name: "streetAddress",
//         type: "text",
//         width: 80,
//         validate: "required",
//       },
//       {
//         title: "State",
//         name: "state",
//         type: "text",
//         width: 80,
//         validate: "required",
//       },
//       {
//         title: "Age",
//         name: "age",
//         type: "number",
//         align: "left",
//         width: 40,
//         validate: "required",
//       },
//       {
//         title: "P. code",
//         name: "postal_code",
//         type: "number",
//         width: 150,
//         align: "left",
//         validate: "required",
//       },
//       {
//         title: "Phone",
//         name: "phone_number",
//         type: "number",
//         width: 150,
//         align: "left",
//         validate: "required",
//       },
//       {
//         type: "control",
//         width: 50,
//         editButton: false,
//       },
//     ],
//   });