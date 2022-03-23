const updateForm = document.querySelector('#update-form-id')
const updatebtn = document.querySelectorAll('#update-category-btn')
const updateName = document.querySelector('#update-form-name')
const updateDesc = document.querySelector('#update-form-desc')
updatebtn.forEach((e) => {
    e.addEventListener('click', () => {
        const idCategoryProduct = e.querySelector('#id_category_product').getAttribute('value');
        const nameCategoryProduct = e.querySelector('#id_category_name').getAttribute('value');
        const descCategoryProduct = e.querySelector('#id_category_desc').getAttribute('value');
        updateForm.setAttribute('value', idCategoryProduct)
        updateName.setAttribute('value', nameCategoryProduct)
        updateDesc.innerText = descCategoryProduct
    })
})