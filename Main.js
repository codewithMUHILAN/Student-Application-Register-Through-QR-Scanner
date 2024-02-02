
function validateSize(input) {
const fileSize = input.files[0].size / 1024 / 1024; // in MiB
if (fileSize > 2) {
alert('File size Is More 2 MiB');

} else {
  //proceed
}
}
