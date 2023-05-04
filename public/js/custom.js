function paginationLimit(limit)
{
    const url = window.location.href.split('?')[0];
    const urlParams = new URLSearchParams(window.location.search);
    const page = urlParams.get('page');
    console.log(page);
    window.location.href = url + `?limit=${limit}&page=${page}`;
}