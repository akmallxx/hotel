const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})

function showAlert(title, text) {
  Swal.fire({
      title: title,
      text: text,
  })
}