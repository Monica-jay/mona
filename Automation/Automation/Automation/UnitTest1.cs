using NUnit.Framework;
using OpenQA.Selenium;
using OpenQA.Selenium.Chrome;
using System.Threading;
using System;

namespace Automation
{
    public class Tests
    {
        IWebDriver driver;

        [OneTimeSetUp]
        public void Setup()
        {
            driver = new ChromeDriver();
        }

        [Test, Order(1)]
        public void EnterUrl_LaunchHomePage()
        {
            var actualResult = "Sell Your Car";

            driver.Url = "http://localhost/assignment_final/";

            var expectedResult = driver.Title;

            Assert.AreEqual(actualResult, expectedResult);
        }

        [Test, Order(2)]
        public void EnterIncompleteDetails_ClickSubmitButton()
        {
            //Thread.Sleep(2000);

            var actualResult = "New record successfully Insert!";

            driver.FindElement(By.Name("seller_name")).SendKeys("Some name");
            // driver.FindElement(By.Name("seller_name")).SendKeys("Some name");
            driver.FindElement(By.Name("submit")).Click();
            //div[contains(text(),'New record successfully Insert!')]

            var expectedResult = driver.FindElement(By.XPath("//div[contains(text(),'New record successfully Insert!')]")).Text;

            Assert.AreEqual(actualResult, expectedResult);
        }

        [Test, Order(3)]
        public void EnterCarDetails_LaunchCarPage()
        {
            driver.Url = "https://www.jdpower.com/cars/2019/bmw/x5";
            var actualResult = "2019 BMW X5";

            driver.Url = "http://localhost/assignment_final/";


            driver.FindElement(By.Name("vehicle_make")).SendKeys("BMW");
            driver.FindElement(By.Name("Model")).SendKeys("X5");
            driver.FindElement(By.Name("Year")).SendKeys("2019");
            driver.FindElement(By.Name("search for car")).Click();

            var expectedResult =driver.Title;

            Assert.AreEqual(actualResult, expectedResult);

        }
       
        [Test, Order(4)]
        public void EnterInvalidPhoneNo_DisplayPrompt()
        {

            var actualResult = "Plz enter on valid Phone number";

            driver.FindElement(By.Name("Phone number")).SendKeys("abcd");
            driver.FindElement(By.Name("submit")).Click();

            var expectedResult = driver.FindElement(By.XPath("//body/div[2]/div[2]/div[1]/form[1]/fieldset[1]/div[4]/div[1]/input[1]")).Text;

            Assert.AreEqual(actualResult, expectedResult);

        }

        [Test, Order(5)]
        public void EnterInvalidEmail_DisplayPrompt()
        {

            var actualResult = "You have entered an invalid email address!";

            driver.FindElement(By.Name("seller_name")).SendKeys("Mohan");
            driver.FindElement(By.Name("Address")).SendKeys("Kings Dr");
            driver.FindElement(By.Name("City")).SendKeys("Kitchener");
            driver.FindElement(By.Name("Phone number")).SendKeys("1234567890");
            driver.FindElement(By.Name("Email Address")).SendKeys("mmmmm");
            driver.FindElement(By.Name("submit")).Click();

            var expectedResult = Assert.That(driver.SwitchTo().Alert().Text, Is.EqualTo("You have entered an invalid email address!"));

            Assert.AreEqual(actualResult, expectedResult);

        }


    }
}