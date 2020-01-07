package Pizzadispenser;

public class PizzaDispenser {

    private Pizza pizza;
    public Pizzadispenser(){
    }
    public void dispensePizza(String type, int size) throws Exception
    {
        switch pizza(type)
        {
            case "Margharita":
                pizza = new Margharita(int size);
                break;
            case "Pepperoni":
                pizza = new Pepperoni(int size);
                break;
            case "Hawaï":
                pizza = new Hawaï(int size);
                break;
            default:
                throw new Exception("Invalid pizza type selected!");
        }
        double price = pizza.getPrice();
    }
}
