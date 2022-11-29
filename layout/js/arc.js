var arcface='Demo-Fanpage-1262399433880556/';
var arczalo='01234567890';
var arczalo2='';

var arczalo3='';
var arczalo4='';
var arczalo5='';

var arcsky='';
var arcemail='email@demoemail.vn';
var arctel='01234567890';
var arctel2='09876543210';
var arctel3='';

var arctel4='';
var arctel5='';
var arctel6='';
var arctel7='';
var arctel8='';

var arcsms='01234567890';
var arCuMessages = ["Xin chào", "Chúng tôi có thể giúp gì cho quý khách"];
var arcyoutube='';
var arcgooglemap='';
var arctiktok='';
 

var arCuLoop = false;

var arCuCloseLastMessage = false;

var arCuPromptClosed = false;

var _arCuTimeOut = null;

var arCuDelayFirst = 2000;

var arCuTypingTime = 2000;

var arCuMessageTime = 4000;

var arCuClosedCookie = 0;

var arcItems = [];

window.addEventListener('load', function() {

arCuClosedCookie = arCuGetCookie('arcu-closed');

jQuery('#arcontactus').on('arcontactus.init', function() {

if (arCuClosedCookie) {

return false;

} 

arCuShowMessages();

});

jQuery('#arcontactus').on('arcontactus.openMenu', function() {

clearTimeout(_arCuTimeOut);

arCuPromptClosed = true;

jQuery('#contact').contactUs('hidePrompt');

arCuCreateCookie('arcu-closed', 1, 30);

});

jQuery('#arcontactus').on('arcontactus.hidePrompt', function() {

clearTimeout(_arCuTimeOut);

arCuPromptClosed = true;

arCuCreateCookie('arcu-closed', 1, 30);

});

 


var arcItem = {};

arcItem.id = 'msg-item-3';

arcItem.class = 'msg-item-telegram-plane';

arcItem.title = 'SMS';

arcItem.icon = '<strong class="zalochaticon">SMS</strong>';

arcItem.href = 'sms:'+arcsms;

arcItem.color = '#990000';

if(arcsms!='')
{
arcItems.push(arcItem);
}

var arcItem = {};

arcItem.id = 'msg-item-1';

arcItem.class = 'msg-item-facebook-messenger';

arcItem.title = 'Messenger';

arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg>';

arcItem.href = 'https://m.me/'+arcface;

arcItem.color = '#567AFF';

if(arcface!='')
{
arcItems.push(arcItem);
}


        var arcItem = {};

        arcItem.id = 'msg-item-9';
        
        arcItem.class = 'msg-item-telegram-plane';
        
        arcItem.title = 'Zalo chat';
        
        arcItem.icon = '<strong class="zalochaticon">Zalo</strong>';
        
        arcItem.href = 'https://zalo.me/'+arczalo;
        
        arcItem.color = '#1EBEA5';
        
        if(arczalo!='')
        {
        arcItems.push(arcItem);
        }
    











var arcItem = {};

arcItem.id = 'msg-item-tiktok';

arcItem.class = 'msg-item-tiktok';

arcItem.title = 'Tiktok';

arcItem.icon = '<svg viewBox="0 0 250 250" xmlns="http://www.w3.org/2000/svg"><g clip-rule="evenodd" fill-rule="evenodd"><path d="M25 0h200c13.808 0 25 11.192 25 25v200c0 13.808-11.192 25-25 25H25c-13.808 0-25-11.192-25-25V25C0 11.192 11.192 0 25 0z" fill="#010101"/><path d="M156.98 230c7.607 0 13.774-6.117 13.774-13.662s-6.167-13.663-13.774-13.663h-2.075c7.607 0 13.774 6.118 13.774 13.663S162.512 230 154.905 230z" fill="#ee1d51"/><path d="M154.717 202.675h-2.075c-7.607 0-13.775 6.118-13.775 13.663S145.035 230 152.642 230h2.075c-7.608 0-13.775-6.117-13.775-13.662s6.167-13.663 13.775-13.663z" fill="#66c8cf"/><ellipse cx="154.811" cy="216.338" fill="#010101" rx="6.699" ry="6.643"/><path d="M50 196.5v6.925h8.112v26.388h8.115v-26.201h6.603l2.264-7.112zm66.415 0v6.925h8.112v26.388h8.115v-26.201h6.603l2.264-7.112zm-39.81 3.93c0-2.17 1.771-3.93 3.959-3.93 2.19 0 3.963 1.76 3.963 3.93s-1.772 3.93-3.963 3.93c-2.188-.001-3.959-1.76-3.959-3.93zm0 6.738h7.922v22.645h-7.922zM87.924 196.5v33.313h7.925v-8.608l2.453-2.248L106.037 230h8.49l-11.133-16.095 10-9.733h-9.622l-7.923 7.86V196.5zm85.47 0v33.313h7.926v-8.608l2.452-2.248L191.509 230H200l-11.133-16.095 10-9.733h-9.622l-7.925 7.86V196.5z" fill="#fff"/><path d="M161.167 81.186c10.944 7.819 24.352 12.42 38.832 12.42V65.755a39.26 39.26 0 0 1-8.155-.853v21.923c-14.479 0-27.885-4.601-38.832-12.42v56.835c0 28.432-23.06 51.479-51.505 51.479-10.613 0-20.478-3.207-28.673-8.707C82.187 183.57 95.23 189.5 109.66 189.5c28.447 0 51.508-23.047 51.508-51.48V81.186zm10.06-28.098c-5.593-6.107-9.265-14-10.06-22.726V26.78h-7.728c1.945 11.09 8.58 20.565 17.788 26.308zm-80.402 99.107a23.445 23.445 0 0 1-4.806-14.256c0-13.004 10.548-23.547 23.561-23.547a23.6 23.6 0 0 1 7.147 1.103V87.022a51.97 51.97 0 0 0-8.152-.469v22.162a23.619 23.619 0 0 0-7.15-1.103c-13.013 0-23.56 10.543-23.56 23.548 0 9.195 5.272 17.157 12.96 21.035z" fill="#ee1d52"/><path d="M153.012 74.405c10.947 7.819 24.353 12.42 38.832 12.42V64.902c-8.082-1.72-15.237-5.942-20.617-11.814-9.208-5.743-15.843-15.218-17.788-26.308H133.14v111.239c-.046 12.968-10.576 23.468-23.561 23.468-7.652 0-14.45-3.645-18.755-9.292-7.688-3.878-12.96-11.84-12.96-21.035 0-13.005 10.547-23.548 23.56-23.548 2.493 0 4.896.388 7.15 1.103V86.553c-27.945.577-50.42 23.399-50.42 51.467 0 14.011 5.597 26.713 14.68 35.993 8.195 5.5 18.06 8.707 28.673 8.707 28.445 0 51.505-23.048 51.505-51.479z" fill="#fff"/><path d="M191.844 64.902v-5.928a38.84 38.84 0 0 1-20.617-5.887 38.948 38.948 0 0 0 20.617 11.815zM153.439 26.78a39.524 39.524 0 0 1-.427-3.198V20h-28.028v111.24c-.045 12.967-10.574 23.467-23.56 23.467-3.813 0-7.412-.904-10.6-2.512 4.305 5.647 11.103 9.292 18.755 9.292 12.984 0 23.515-10.5 23.561-23.468V26.78zm-44.864 59.773v-6.311a51.97 51.97 0 0 0-7.067-.479C73.06 79.763 50 102.811 50 131.24c0 17.824 9.063 33.532 22.835 42.772-9.083-9.28-14.68-21.982-14.68-35.993 0-28.067 22.474-50.889 50.42-51.466z" fill="#69c9d0"/><path d="M154.904 230c7.607 0 13.775-6.117 13.775-13.662s-6.168-13.663-13.775-13.663h-.188c-7.607 0-13.774 6.118-13.774 13.663S147.109 230 154.716 230zm-6.792-13.662c0-3.67 3-6.643 6.7-6.643 3.697 0 6.697 2.973 6.697 6.643s-3 6.645-6.697 6.645c-3.7-.001-6.7-2.975-6.7-6.645z" fill="#fff"/></g></svg>';

arcItem.href = 'https://www.tiktok.com/@'+arctiktok;

arcItem.color = 'black';

if(arctiktok!='')
{
arcItems.push(arcItem);
}




var arcItem = {};

arcItem.id = 'msg-item-6';

arcItem.class = 'msg-item-skype';

arcItem.title = 'Skype Chat';

arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z"></path></svg>';

arcItem.href = 'skype://'+arcsky+'?chat';

arcItem.color = '#1C9CC5';

if(arcsky!='')
{
arcItems.push(arcItem);
}

var arcItem = {};

arcItem.id = 'msg-item-7';

arcItem.class = 'msg-item-envelope';

arcItem.title = 'Email';

arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>';

arcItem.href = 'mailto:'+arcemail;

arcItem.color = '#FF643A';

if(arcemail!='')
{
arcItems.push(arcItem);
}

var arcItem = {};

arcItem.id = 'msg-item-8';

arcItem.class = 'msg-item-phone';

arcItem.title = 'Gọi  '+arctel;

arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';

arcItem.href = 'tel:'+arctel;

arcItem.color = '#4EB625';

if(arctel!='')
{
arcItems.push(arcItem);
}

 
 

var arcItem = {};

arcItem.id = 'msg-item-9';

arcItem.class = 'msg-item-phone';

arcItem.title = 'Gọi '+arctel2;

arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';

arcItem.href = 'tel:'+arctel2;

arcItem.color = '#4EB625';

if(arctel2!='')
{
arcItems.push(arcItem);
}

 

var arcItem = {};

arcItem.id = 'msg-item-10';

arcItem.class = 'msg-item-phone';

arcItem.title = 'Gọi  '+arctel3;

arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';

arcItem.href = 'tel:'+arctel3;

arcItem.color = '#4EB625';

if(arctel3!='')
{
arcItems.push(arcItem);
}




var arcItem = {};

arcItem.id = 'msg-item-11';

arcItem.class = 'msg-item-phone';

arcItem.title = 'Gọi  '+arctel4;

arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';

arcItem.href = 'tel:'+arctel4;

arcItem.color = '#4EB625';

if(arctel4!='')
{
arcItems.push(arcItem);
}


var arcItem = {};

arcItem.id = 'msg-item-12';

arcItem.class = 'msg-item-phone';

arcItem.title = 'Gọi  '+arctel5;

arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';

arcItem.href = 'tel:'+arctel5;

arcItem.color = '#4EB625';

if(arctel5!='')
{
arcItems.push(arcItem);
}


var arcItem = {};

arcItem.id = 'msg-item-13';

arcItem.class = 'msg-item-phone';

arcItem.title = 'Gọi  '+arctel6;

arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';

arcItem.href = 'tel:'+arctel6;

arcItem.color = '#4EB625';

if(arctel6!='')
{
arcItems.push(arcItem);
}


var arcItem = {};

arcItem.id = 'msg-item-14';

arcItem.class = 'msg-item-phone';

arcItem.title = 'Gọi  '+arctel7;

arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';

arcItem.href = 'tel:'+arctel7;

arcItem.color = '#4EB625';

if(arctel7!='')
{
arcItems.push(arcItem);
}


var arcItem = {};

arcItem.id = 'msg-item-15';

arcItem.class = 'msg-item-phone';

arcItem.title = 'Gọi  '+arctel8;

arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';

arcItem.href = 'tel:'+arctel8;

arcItem.color = '#4EB625';

if(arctel8!='')
{
arcItems.push(arcItem);
}





var arcItem = {};
arcItem.id = 'msg-item-youtube';
arcItem.class = 'msg-item-youtube';
arcItem.title = 'Youtube';
arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 461.001 461.001" style="enable-background:new 0 0 461.001 461.001;" xml:space="preserve"><path style="fill:#F61C0D;" d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728 c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137 C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607 c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z"/></svg>';
arcItem.href = ''+arcyoutube;
arcItem.color = '#e4e4e4';
if(arcyoutube!=''){
arcItems.push(arcItem);
}


var arcItem = {};
arcItem.id = 'msg-item-googlemap';
arcItem.class = 'msg-item-googlemap';
arcItem.title = 'Google Map';
arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 92.3 132.3"><path fill="#1a73e8" d="M60.2 2.2C55.8.8 51 0 46.1 0 32 0 19.3 6.4 10.8 16.5l21.8 18.3L60.2 2.2z"/><path fill="#ea4335" d="M10.8 16.5C4.1 24.5 0 34.9 0 46.1c0 8.7 1.7 15.7 4.6 22l28-33.3-21.8-18.3z"/><path fill="#4285f4" d="M46.2 28.5c9.8 0 17.7 7.9 17.7 17.7 0 4.3-1.6 8.3-4.2 11.4 0 0 13.9-16.6 27.5-32.7-5.6-10.8-15.3-19-27-22.7L32.6 34.8c3.3-3.8 8.1-6.3 13.6-6.3"/><path fill="#fbbc04" d="M46.2 63.8c-9.8 0-17.7-7.9-17.7-17.7 0-4.3 1.5-8.3 4.1-11.3l-28 33.3c4.8 10.6 12.8 19.2 21 29.9l34.1-40.5c-3.3 3.9-8.1 6.3-13.5 6.3"/><path fill="#34a853" d="M59.1 109.2c15.4-24.1 33.3-35 33.3-63 0-7.7-1.9-14.9-5.2-21.3L25.6 98c2.6 3.4 5.3 7.3 7.9 11.3 9.4 14.5 6.8 23.1 12.8 23.1s3.4-8.7 12.8-23.2"/></svg>';
arcItem.href = ''+arcgooglemap;
arcItem.color = '#e4e4e4';
if(arcgooglemap!=''){
arcItems.push(arcItem);
}
 
 
 

jQuery('#arcontactus').contactUs({

items: arcItems

});

});
