function activateTab(tabId) {
    var someTabTriggerEl = document.getElementById(tabId);
    var tab = new bootstrap.Tab(someTabTriggerEl);

    tab.show(); // Ativa a aba
}
