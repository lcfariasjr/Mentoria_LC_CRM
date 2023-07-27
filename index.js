const template = document.createElement('template');
template.innerHTML = `


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Criador de Entidades Help Br24</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Leads_Bitrix24/index_leads.html">Criar Leads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Contact_Bitrix24/index_contact.html">Criar Contatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Company_Bitrix24/index_company.html">Criar Empresas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Deals_Bitrix24/index_deal.html">Criar Negócios</a>
                </li>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
            </ul>
        </div>
    </div>
</nav>
`;

document.body.prepend(template.content);