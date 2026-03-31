<script>
    const token = '3|bOoTF3Ddn5e2qte3xTQ8i29jcm2aX5mT3iSl796Ua4d0c843';

    fetch('http://127.0.0.1:8000/api/player', {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json'
        }
    })
    .then(res => res.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error fetching players:', error));
</script>