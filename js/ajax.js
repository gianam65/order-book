// $(document).ready(function () {
//     $("#search-feature").click(function (e) {
//         e.preventDefault();
//         const searchTerm = $("#search-value").val();

//         $.ajax({
//             url: './src/process-search.php',
//             type: 'POST',
//             data: {
//                 searchTerm: searchTerm
//             },

//             success: function () {
//                 window.location.href = './route/global/search-result.php'
//                 $.ajax({
//                     url: './route/global/search-result.php',
//                     type: 'POST',
//                     data: {
//                         searchTerm: searchTerm
//                     },
//                 })
//             }
//         })
//     })
// })