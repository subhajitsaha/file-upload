(function () {
  "use strict";
  const form = document.querySelector("#form-file-upload");
  form.addEventListener(
    "submit",
    function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add("was-validated");
    },
    false
  );
  const alertNode = document.querySelector("#feedback-alert");
  function updateSize() {
    alertNode.classList.add("hide");
    let nBytes = 0,
      oFiles = this.files,
      nFiles = oFiles.length,
      fileNames = [];
    for (let nFileId = 0; nFileId < nFiles; nFileId++) {
      nBytes += oFiles[nFileId].size;
      fileNames.push(oFiles[nFileId].name);
    }
    let sOutput = nBytes + " bytes";
    const aMultiples = ["KiB", "MiB", "GiB", "TiB", "PiB", "EiB", "ZiB", "YiB"];
    for (
      let nMultiple = 0, nApprox = nBytes / 1024;
      nApprox > 1;
      nApprox /= 1024, nMultiple++
    ) {
      sOutput = nApprox.toFixed(3) + " " + aMultiples[nMultiple];
    }
    document.querySelector("#file-name").textContent =
      nFiles > 0 ? fileNames.join("") : "";
    document.querySelector("#file-size").textContent =
      nFiles > 0 ? sOutput : "";
    alertNode.classList.remove("hide");
  }
  const uploadFile = document.querySelector("#upload-file");
  uploadFile.addEventListener("change", updateSize, false);
})();
