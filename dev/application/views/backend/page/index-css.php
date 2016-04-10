ul.breadcrumb {
    float: left;
    font-size: 12px;
    margin: 20px 0 0;
    padding: 10px;
    width: 100%;
}

ul.breadcrumb li {
    color: #999;
    float: left;
    list-style-type: none;
    margin-right: 10px;
}

ul.breadcrumb li::after {
    color: #999999;
    content: "›";
    margin-left: 3px;
}

ul.breadcrumb li:last-child::after {
    content: "";
    margin-left: 3px;
}
