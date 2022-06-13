document.getElementById("imgInp").addEventListener("change", function () {
    if (this.files[0]) {
        var fr = new FileReader();

        fr.addEventListener("load", function () {
            document.getElementById("blah").src = fr.result;
        }, false);

        fr.readAsDataURL(this.files[0]);
    }
});
