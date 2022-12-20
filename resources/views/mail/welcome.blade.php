<style>
    .container
    {
        background: linear-gradient(to right,tomato, #f12803);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    h4,h1{
        color:white;
    }
</style>

<div class="container">
    <h4>Merhaba {{$user->name}},</h4>
    <h1>Humbara Games'e Hoşgeldin!</h1>
</div>
