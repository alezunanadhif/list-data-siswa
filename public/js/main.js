// Dapatkan elemen <body>
var body = document.getElementsByTagName("body")[0];

// Cek apakah tema sebelumnya disimpan di Local Storage
var theme = localStorage.getItem("theme");

if (theme === "dark") {
    // Jika tema sebelumnya adalah dark, tambahkan kelas "dark" pada elemen <body>
    body.classList.add("dark");
} else {
    // Jika tema sebelumnya adalah light atau tema belum disimpan di Local Storage, tambahkan kelas "light" pada elemen <body>
    body.classList.add("light");
}

// Set event listener untuk aksi klik pada elemen Light Theme
var lightTheme = document.getElementById("light-theme");
lightTheme.addEventListener("click", function () {
    // Hapus kelas "dark" dan tambahkan kelas "light" pada elemen <body>
    body.classList.remove("dark");
    body.classList.add("light");

    // Simpan tema saat ini di Local Storage
    localStorage.setItem("theme", "light");
});

// Set event listener untuk aksi klik pada elemen Dark Theme
var darkTheme = document.getElementById("dark-theme");
darkTheme.addEventListener("click", function () {
    // Hapus kelas "light" dan tambahkan kelas "dark" pada elemen <body>
    body.classList.remove("light");
    body.classList.add("dark");

    // Simpan tema saat ini di Local Storage
    localStorage.setItem("theme", "dark");
});
