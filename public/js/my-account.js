document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("avatarInput").addEventListener("change", function (event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById("avatarImg").src = e.target.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    });

    document.getElementById("account-form").addEventListener("submit", function (event) {
        event.preventDefault();
        this.submit();
    });
});
