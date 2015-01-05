Vlad's documentation is built using [mkdocs](http://www.mkdocs.org). 

## Installation

In order to install MkDocs you'll need Python installed on your system, as well as the Python package manager "pip". You can check if you have these already installed like so:

    $ python --version
    Python 2.7.2
    $ pip --version
    pip 1.5.2

MkDocs supports Python 2.6, 2.7, 3.3 and 3.4.

Install the mkdocs package using pip:

    $ pip install mkdocs

You should now have the `mkdocs` command installed on your system. Run `mkdocs` help to check that everything worked okay.

    $ mkdocs help
    mkdocs [help|new|build|serve|gh-deploy] {options}

## Usage

Once installed you can build the documentation using the following command:

    mkdocs build --clean
    
Alternatively you can build documentation using the following command:

    mkdocs serve

You can then view the documentation on the URL [http://127.0.0.1:8000/](http://127.0.0.1:8000/).
