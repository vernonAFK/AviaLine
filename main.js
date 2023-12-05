const start_time = document.getElementById('start_time');
const end_time = document.getElementById('end_time');

var date = new Date();
const TODAY = date.toLocaleDateString().split('.').reverse().join('-');

start_time.setAttribute('min', TODAY);
start_time.setAttribute('value', TODAY);
end_time.setAttribute('min', document.getElementById('start_time').value);

start_time.addEventListener('change', () => {
    document.getElementById('end_time').value = null;
    end_time.setAttribute('min', document.getElementById('start_time').value);
})

date.setDate(date.getDate() + 59);
const MAX_START_TIME = date.toLocaleDateString().split('.').reverse().join('-');

start_time.setAttribute('max', MAX_START_TIME);

date.setDate(date.getDate() + 1);
const MAX_END_TIME = date.toLocaleDateString().split('.').reverse().join('-');

end_time.setAttribute('max', MAX_END_TIME);
