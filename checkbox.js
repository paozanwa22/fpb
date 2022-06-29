public function register()
{
    if( $this->request->getMethod() == "get" ){
        return view("register");
    } else if($this->request->getMethod() == "post"){
        $name = $this->request->getVar("name");
        $gender = $this->request->getVar("gender");
        $hobbies = implode(",", $this->request->getVar("hobby"));
        echo `
        Hello $name <br>
        Genre : $gender <br>
        Hobby : $hobbies
        `;
    }
}