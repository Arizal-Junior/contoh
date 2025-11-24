function login() {
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    const dummyUsername = "Jun";
    const dummyPassword = "123";

    if (user === dummyUsername && pass === dummyPassword) {
        alert("Login Berhasil!");
        window.location.href = "menu.html";
    } else {
        alert("Username atau Password salah!");
    }
}
