// // Hiển thị cafe
// document.getElementById('lipton').addEventListener('click', function () {
//     const ids = [
//         'ancafe', 'anchitietcafe', 'antrasua', 'anchitiettrasua',
//         'annuocep', 'anchitietnuocep', 'ansinhto', 'anchitietsinhto',
//         'anche', 'anchitietche', 'anbanhtrang', 'anchitietbanhtrang',
//         'ancavien', 'anchitietcavien', 'annuocchai', 'anchitietnuocchai',
//         'antotuong', 'anchitiettotuong'
//     ];

//     ids.forEach(id => {
//         const an = document.getElementById(id);
//         if (an.style.display === 'flex' || an.style.display === '') {
//             an.style.display = 'none';
//         } else {
//             an.style.display = 'flex';
//         }
//     });
// });
function show_item(tenmon) {
    console.log(tenmon)
    $('.mon_item').addClass('hidden')
    if (tenmon == 'all') {
        $('.mon_item').removeClass('hidden')
    } else {
        $('#' + tenmon).removeClass('hidden')
    }
}
