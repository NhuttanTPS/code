function show_item(tenmon) {
    console.log(tenmon)
    $('.mon_item').addClass('hidden')
    if (tenmon == 'all') {
        $('.mon_item').removeClass('hidden')
    } else {
        $('#' + tenmon).removeClass('hidden')
    }
}
document.addEventListener('DOMContentLoaded', (event) => {
    const filterInput = document.getElementById('filterInput');
    const dataContainer = document.getElementById('dataContainer');
    const items = dataContainer.getElementsByClassName('dataItem');
    filterInput.addEventListener('input', function () {
        const filterValue = filterInput.value.toLowerCase();

        Array.from(items).forEach(function (item) {
            const itemName = item.textContent.toLowerCase();
            if (itemName.includes(filterValue)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});