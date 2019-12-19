package Pizzadispenser;

public class PizzaDispenser {

    private Pizza pizza;
    public Pizzadispenser(){
    }
    public void dispensePizza(String type, int size)
    {
        pizza = new Pizza(type, size);
    }
}
