<div class="search-style-1">
    <form action="{{ route('product.search') }}">
        <input type="text" name="q" placeholder="Search for items..." value="{{ $q }}">
    </form>
    <style>
        .search-style-1 form {
            width: 370px;
            position: relative;
        }

        .search-style-1 form input {
            font-size: 15px;
            height: 48px;
            color: #1a1a1a;
            border-radius: 26px;
            padding: 3px 50px 3px 20px;
            border: 1px solid #f5f5f5;
            background-color: #f5f5f5;
            -webkit-transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
            transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
        }

        .search-style-1 {
            margin-right: 28px;
        }

        .search-style-1 form input::-moz-input-placeholder {
            color: #1a1a1a;
            opacity: 1;
        }

        .search-style-1 form input::-webkit-input-placeholder {
            color: #1a1a1a;
            opacity: 1;
        }

        .search-style-1 form input:focus {
            border: 1px solid #F15412;
            background-color: #ffffff;
        }

        .search-style-1 form button {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 0;
            border: none;
            font-size: 19px;
            height: 100%;
            padding: 0 15px;
            background-color: transparent;
            color: #F15412;
        }

        .search-style-1 form button:hover {
            color: #3f81eb;
        }
    </style>
</div>
