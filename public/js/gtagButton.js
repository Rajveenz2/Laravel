
function sendButtonClickEvent(){

    // take characters before 'btn'
    // replace '-' to ' ' (empty space)
    // join-btn become Join
    // var action = $(this)[0].id.split('btn')[0].replaceAll('-', ' ');
    var action = $(this)[0].dataset.gaAction.split('click')[0].replaceAll('-', ' ');
    var title = $(this)[0].dataset.gameName;
    
    // replace every first char of words to uppsercase
    action = action.replace(/(^\w{1})|(\s+\w{1})/g, letter => letter.toUpperCase());

    // Event Action
    // Event Category
    // Event Label
    gtag('event', `${action} Click`, {
        'event_category': `Game Link Click`,
        'event_label': `${title}`,
    });
}

// register button click 
$(document).ready(function(){
    $(`[data-ga-action]`).on('click',sendButtonClickEvent);
});
