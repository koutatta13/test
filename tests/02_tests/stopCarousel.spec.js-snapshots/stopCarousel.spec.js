const { test, expect } = require('@playwright/test');
test('stopCarousel_test.html', async ({ page }) => {
  await page.goto('http://localhost:3000/test.html');
  await page.reload();
  await page.evaluate(() => {
    var parent= document.querySelector(".carousel");
    const cloneParent=parent.cloneNode(true);
    parent.replaceWith(cloneParent);
  });
  await expect(page).toHaveScreenshot({
      fullPage: true,
      animations: 'disabled',
      timeout: 10000,
  });
});
