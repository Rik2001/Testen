package Pizzadispenser.pizza;

public abstract class Pizza {
    protected String type;
    protected double price;
    protected Boolean groot;

    public Pizza(String type, Boolean groot){
        this.type = type;
        this.groot = groot;
    }
//    public Pizza(){
//        this.type = "N/A";
//        this.groot = false;
//    }
}
