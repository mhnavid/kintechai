/**
 * Created by Md Apu on 5/3/2017.
 */

/**
 * Sends AJAX request to retrieve products as JSON object
 * @param1 url string           Where to send the request
 * @param2 start int|string     Where to start
 * @param3 amount int|string    How much to get
 * @param4 elementID string     Where the Customized HTML will be inserted
 */
function getAllProducts(url, start, amount, elementID) {

    axios.post(url, {
        start: start,
        amount: amount
    })
     .then(function (response) {

        $(elementID).html(getFromJSON(response));
     })
     .catch(function (error) {
        console.log(error);
     });
}


/**
 * OutPuts a Customized HTML using the @param (JSON) object by iterating through
 * @param json          JSON object to loop through
 * @returns {string}    Customized HTML
 */
function getFromJSON(json) {

    output = '';

    $(json.data).each(function (key, value) {

        output += '<td class="main-related-product-image">';
        output += '<img src="uploads/products/'+ value.image +'" class="productImg" title="'+value.name+'" alt="'+value.name+'">';
        output += '</td>';
    });

    return output;
}

