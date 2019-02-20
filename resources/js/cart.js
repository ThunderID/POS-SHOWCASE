/*
    docs
    1. initiate cart js:
        var cart = window.cart; 
    2. define the callback
        define your success & error callback by using cart.defineOnSuccess( yourFunctions(_payload){} ) and cart.defineOnError( yourFunctions(_error){} ). example :
    3. calling cart.add( PRODUCT_DETAIL_DATA, URL, TOKEN )
        -> PRODUCT_DETAIL_DATA : on object json format
        -> URL : url to whom data submitted with method post to be handled by backend process. format : string
        -> TOKEN: csrf token. format : string.
*/


window.cart = new function(){
    this.on_success = null, 
    this.on_error = null,

    // interface ajax actions
    this.defineOnSuccess = function (syntax) {
        on_success = syntax;
    },
    this.defineOnError = function (syntax) {
        on_error = syntax;
    },

    this.add = function(_dt, _url, _token){
        $.ajax({
            url: _url,
            type: "POST",
            data: _dt,
            timeout: 10000,
            accept: 'application/json',
            contentType: "application/json",
            processData: false,
            dataType: 'json',
            success: on_success,
            error: on_error,
            headers: { "X-CSRF-TOKEN": _token }
        });
    }

    this.remove = function(_id, _url, _token){
        $.ajax({
            url: _url,
            type: "DELETE",
            data: _id,
            timeout: 10000,
            accept: 'application/json',
            contentType: "application/json",
            processData: false,
            dataType: 'json',
            success: on_success,
            error: on_error,
            headers: { "X-CSRF-TOKEN": _token }
        });
    }    
}
