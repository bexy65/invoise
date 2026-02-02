$(async function () {
  let users = await getUsers();
  if (!users || users.length === 0) return;

  await userDropDownHandler(users);

  const savedId = localStorage.getItem("selected_employee") || users[0].id;
  $("#employeeSelect").val(savedId).trigger("change");
});

$("#employeeSelect").on("change", async function () {
  const id = $(this).val();
  if (!id) return;

  localStorage.setItem("selected_employee", id);

  let user = await getUser(id);
  let userWorkRecords = await getUserWorkRecords(id);
  showDataHandler(user, userWorkRecords);
});

async function getUsers() {
  const data = await $.getJSON("/api/user");
  if (data.status === "success") {
    return data.users;
  } else {
    return [];
  }
}

async function getUser(id) {
  const data = await $.getJSON(`/api/user/${id}`);
  if (data.status === "success") {
    return data.user;
  } else {
    return null;
  }
}

async function getUserWorkRecords(id) {
  const data = await $.getJSON(`/api/user-work-records/${id}`);
  if (data.status === "success") {
    return data.record;
  } else {
    return [];
  }
}

async function userDropDownHandler(usersArray) {
  $("#employeeSelect").empty();
  usersArray.forEach((user) => {
    $("#employeeSelect").append(
      $("<option>", {
        value: user.id,
        text: user.first_name + " " + user.last_name,
      }),
    );
  });
}

function showDataHandler(emp, workRecords) {
  if (!emp) return;

  $("#test").html(`
    <tr>
      <td>1 </td>
      <td>${emp.first_name} ${emp.last_name}</td>
      <td>${emp.role}</td>
      <td>${workRecords ?? "N/A"}</td>
      <td>${emp.currency} ${emp.rate}</td>
    </tr>
  `);
}
