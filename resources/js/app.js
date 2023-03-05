import './bootstrap';
import handleDeleteModal from './handleDeleteModal'
import InitLocationTime from './geolocation'

$(function() {
    // Handle Delete Category
    handleDeleteModal();
    // Handle GeoLocation
    InitLocationTime();

});
